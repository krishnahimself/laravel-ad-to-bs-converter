<?php

namespace Krishnahimself\DateConverter\Tests;

use Krishnahimself\DateConverter\DateConverter;

class DateConverterTest extends TestCase
{
    /** @test */
    public function it_can_convert_english_date_to_nepali_date()
    {
        $nepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)->toNepaliDate();

        $this->assertEquals('2077-6-18', $nepaliDate);
    }

    /** @test */
    public function it_can_convert_english_date_to_formatted_nepali_date()
    {
        $formattedNepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)
        ->toFormattedNepaliDate();

        $this->assertEquals('१८ असोज २०७७, आइतवार', $formattedNepaliDate);
    }

    /** @test */
    public function it_can_convert_english_date_to_nepali_date_array()
    {
        $nepaliDateArray = DateConverter::fromEnglishDate(2020, 10, 4)->toNepaliDateArray();

        $result = [
            'year' => 2077,
            'month' => 6,
            'day' => 18,
            'day_of_week' => 1,
        ];

        $this->assertEquals($result, $nepaliDateArray);
    }

    /** @test */
    public function it_can_convert_english_date_to_formatted_nepali_date_array()
    {
        $formattedNepaliDateArray = DateConverter::fromEnglishDate(2020, 10, 4)
        ->toFormattedNepaliDateArray();

        $result = [
            'year' => '२०७७',
            'month' => 'असोज',
            'day' => '१८',
            'day_of_week' => 'आइतवार',
        ];

        $this->assertEquals($result, $formattedNepaliDateArray);
    }
}
