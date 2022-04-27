<?php

use Spatie\ScheduleMonitor\Models\MonitoredScheduledTask;
use Spatie\ScheduleMonitor\Models\MonitoredScheduledTaskLogItem;
use Spatie\ScheduleMonitor\Support\Concerns\UsesScheduleMonitoringModels;
use Spatie\ScheduleMonitor\Tests\TestCase;

uses(TestCase::class);

it('can resolve schedule monitoring models', function () {
    $model = new class() {
        use UsesScheduleMonitoringModels;
    };

    $monitorScheduleTask = $model->getMonitoredScheduleTaskModel();
    $monitorScheduleTaskLogItem = $model->getMonitoredScheduleTaskLogItemModel();

    expect($monitorScheduleTask)->toBeInstanceOf(MonitoredScheduledTask::class);
    expect($monitorScheduleTaskLogItem)->toBeInstanceOf(MonitoredScheduledTaskLogItem::class);
});
