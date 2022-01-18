<?php 
namespace App;

use App\Models\WebinarUser;

class Helper
{
    public static function webinarUser($webinar_id, $user_id)
    {
        return WebinarUser::where('webinar_id', $webinar_id)->where('user_id', $user_id)->first();
    }

    public static function marital_status($value)
    {
        switch ($value) {
            case 1:
                $data = "Married";
                break;
            case 2:
                $data = "Widowed";
                break;
            case 3:
                $data = "Separated";
                break;
            case 4:
                $data = "Divorced";
                break;
            case 5:
                $data = "Single";
                break;
            default:
                $data = 'Unknown';
                break;
        }
        return $data;
    }

    public static function gender($value)
    {
        switch ($value) {
            case 0:
                $data = "Male";
                break;
            case 1:
                $data = "Female";
                break;
            case 2:
                $data = "Rather not say";
                break;
            default:
                $data = 'Unknown';
                break;
        }
        return $data;
    }

    public static function employment_status($value)
    {
        switch ($value) {
            case 1:
                $data = "Freelance";
                break;
            case 2:
                $data = "Full-time";
                break;
            case 3:
                $data = "Part-time";
                break;
            case 4:
                $data = "Unemployed";
                break;
            case 5:
                $data = "Self-employed";
                break;
            case 6:
                $data = "Retired";
                break;
            case 7:
                $data = "N/A";
                break;
            default:
                $data = 'Unknown';
                break;
        }
        return $data;
    }

    public static function highest_educational_attainment($value)
    {
        switch ($value) {
            case 1:
                $data = "Some Elementary Graduate";
                break;
            case 2:
                $data = "Elementary Graduate";
                break;
            case 3:
                $data = "Some High School";
                break;
            case 4:
                $data = "High School Graduate";
                break;
            case 5:
                $data = "Some College/Vocational";
                break;
            case 6:
                $data = "College Graduate";
                break;
            case 7:
                $data = "Some/Completed Master's Degree";
                break;
            case 8:
                $data = "Masters Graduate";
                break;
            case 9:
                $data = "Vocational/TVET";
                break;
            default:
                $data = 'Unknown';
                break;
        }
        return $data;
    }
}

