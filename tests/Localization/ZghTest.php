<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Localization;

class ZghTest extends LocalizationTestCase
{
    const LOCALE = 'zgh'; // Standard Moroccan Tamazight

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⴹⵢⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴰⵎⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵢⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⴽⵕⴰⵙ at 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'ⴰⴽⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'ⴰⵙⵉⵎⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⴽⵕⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⴽⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⵎⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⴹⵢⴰⵙ at 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'Last ⴰⵙⴰⵎⴰⵙ at 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Tomorrow at 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Yesterday at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last ⴰⵙⵉⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last ⴰⵢⵏⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last ⴰⵙⴰⵎⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last ⴰⵙⵉⴹⵢⴰⵙ at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last ⴰⵙⵉⵎⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Last ⴰⴽⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Last ⴰⴽⵕⴰⵙ at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last ⴰⵙⵉⵎⵡⴰⵙ at 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1st 1st 1st 1st 1st',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2nd 1st',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3rd 1st',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4th 1st',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5th 1st',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6th 2nd',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7th 2nd',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11th 2nd',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40th',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41st',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100th',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 ⵜⵉⴼⴰⵡⵜ cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 ⵜⵉⴼⴰⵡⵜ, 12:00 ⵜⵉⴼⴰⵡⵜ',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 ⵜⵉⴼⴰⵡⵜ, 1:30 ⵜⵉⴼⴰⵡⵜ',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 ⵜⵉⴼⴰⵡⵜ, 2:00 ⵜⵉⴼⴰⵡⵜ',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 ⵜⵉⴼⴰⵡⵜ, 6:00 ⵜⵉⴼⴰⵡⵜ',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 ⵜⵉⴼⴰⵡⵜ, 10:00 ⵜⵉⴼⴰⵡⵜ',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 ⵜⴰⴷⴳⴳⵯⴰⵜ, 12:00 ⵜⴰⴷⴳⴳⵯⴰⵜ',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 ⵜⴰⴷⴳⴳⵯⴰⵜ, 5:00 ⵜⴰⴷⴳⴳⵯⴰⵜ',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 ⵜⴰⴷⴳⴳⵯⴰⵜ, 9:30 ⵜⴰⴷⴳⴳⵯⴰⵜ',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 ⵜⴰⴷⴳⴳⵯⴰⵜ, 11:00 ⵜⴰⴷⴳⴳⵯⴰⵜ',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0th',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        '1 second ago',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1s ago',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 seconds ago',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2s ago',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        '1 minute ago',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1m ago',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minutes ago',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2m ago',
        // Carbon::now()->subHours(1)->diffForHumans()
        '1 hour ago',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1h ago',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 hours ago',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2h ago',
        // Carbon::now()->subDays(1)->diffForHumans()
        '1 ⴰⴳⵏⵏⴰ ago',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 ⴰⴳⵏⵏⴰ ago',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 ⴰⴳⵏⵏⴰ ago',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 ⴰⴳⵏⵏⴰ ago',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 week ago',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1w ago',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 weeks ago',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2w ago',
        // Carbon::now()->subMonths(1)->diffForHumans()
        '1 month ago',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1mo ago',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 months ago',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2mos ago',
        // Carbon::now()->subYears(1)->diffForHumans()
        '1 year ago',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1yr ago',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 years ago',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2yrs ago',
        // Carbon::now()->addSecond()->diffForHumans()
        '1 second from now',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        '1s from now',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 second after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1s after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 second before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1s before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 second',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1s',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 seconds',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2s',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        '1s from now',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 minute 1 second',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2yrs 3mos 1 ⴰⴳⵏⵏⴰ 1s',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        '3 years from now',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        '5mos ago',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        '2yrs 3mos 1 ⴰⴳⵏⵏⴰ 1s ago',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 week 10 hours',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 week 6 ⴰⴳⵏⵏⴰ',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 week 6 ⴰⴳⵏⵏⴰ',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(["join" => true, "parts" => 2])
        '1 week and 6 ⴰⴳⵏⵏⴰ from now',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 weeks 1 hour',
        // Carbon::now()->addHour()->diffForHumans(["aUnit" => true])
        'an hour from now',
        // CarbonInterval::days(2)->forHumans()
        '2 ⴰⴳⵏⵏⴰ',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 ⴰⴳⵏⵏⴰ 3h',
    ];
}
