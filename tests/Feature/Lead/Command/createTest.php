<?php

use App\Exceptions\LeadAlreadyExistsException;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\User;
use App\Services\Lead\LeadCommandService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function validLeadData(): array
{
    return [
        'firstName' => 'Ahmed',
        'lastName' => 'Hassan',
        'email' => 'ahmed@example.com',
        'phone' => '01012345678',
        'leadSourceId' => LeadSource::factory()->create()->id,
        'leadStatusId' => LeadStatus::factory()->create()->id,
    ];
}

it('creates a lead successfully', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    $lead = app(LeadCommandService::class)
        ->create($data, $owner->id);

    expect($lead)
        ->toBeInstanceOf(Lead::class);

    expect($lead->owner_id)
        ->toBe($owner->id);

    expect($lead->first_name)
        ->toBe('Ahmed');

    $this->assertDatabaseHas('leads', [
        'id' => $lead->id,
        'first_name' => 'Ahmed',
        'last_name' => 'Hassan',
        'email' => 'ahmed@example.com',
        'phone' => '01012345678',
        'owner_id' => $owner->id,
    ]);
});

it('throws an exception when email already exists', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    Lead::factory()->create([
        'email' => $data['email'],
    ]);

    expect(fn () =>
        app(LeadCommandService::class)->create($data, $owner->id)
    )->toThrow(LeadAlreadyExistsException::class);
});

it('throws an exception when phone already exists', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    Lead::factory()->create([
        'phone' => $data['phone'],
    ]);

    expect(fn () =>
        app(LeadCommandService::class)->create($data, $owner->id)
    )->toThrow(LeadAlreadyExistsException::class);
});

it('throws an exception when email and phone already exist', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    Lead::factory()->create([
        'email' => $data['email'],
        'phone' => $data['phone'],
    ]);

    expect(fn () =>
        app(LeadCommandService::class)->create($data, $owner->id)
    )->toThrow(LeadAlreadyExistsException::class);
});

it('allows creating a lead when email and phone are null', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    $data['email'] = null;
    $data['phone'] = null;

    $lead = app(LeadCommandService::class)
        ->create($data, $owner->id);

    expect($lead->email)->toBeNull();
    expect($lead->phone)->toBeNull();

    $this->assertDatabaseHas('leads', [
        'id' => $lead->id,
        'email' => null,
        'phone' => null,
        'owner_id' => $owner->id,
    ]);
});
it('allows creating a lead when only email exists and phone is null', function () {
    $owner = User::factory()->create();

    $data = validLeadData();

    $data['phone'] = null;

    Lead::factory()->create([
        'email' => 'existing@example.com',
        'phone' => '01111111111',
    ]);

    $lead = app(LeadCommandService::class)
        ->create($data, $owner->id);

    expect($lead)->toBeInstanceOf(Lead::class);
});