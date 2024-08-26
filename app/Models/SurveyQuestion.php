<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['survey_id', 'question_text', 'question_type', 'options'];

    //TYPES
    //TEXT 0 
    //SELECT 1 
    //RADIO 2 
    //CHECKBOX 3 
    //DATE 4 
    //DATE_TIME 5 
    //TIME 6


    public function getTypes()
    {
        $type = $this->question_type;
        if($type == 0){
            return 'Text';
        }elseif($type == 1){
            return 'Select';
        }elseif($type == 2){
            return 'Radio';
        }elseif($type == 3){
            return 'Checkbox';
        }elseif($type == 4){
            return 'Date';
        }elseif($type == 5){
            return 'Date Time';
        }elseif($type == 6){
            return 'Time';
        }
    }


    // Renders the question field based on the type

    public function renderQuestionField()
    {
        $html = '<div class="form-group p-2"><div class="mb-3"><label>' . e($this->question_text) . '</label></div>';

        switch ($this->question_type) {
            case 0: // Text Input
                $html .= '<input type="text" name="q_' . $this->id . '" class="form-control" required />';
                break;

            case 1: // Select Input
                $html .= '<select name="q_' . $this->id . '" class="form-control" required>';
                $html .= '<option value="">Please Select</option>';
                foreach (explode(',', $this->options) as $option) {
                    $html .= '<option value="' . e($option) . '">' . e($option) . '</option>';
                }
                $html .= '</select>';
                break;

            case 2: // Radio Input
                foreach (explode(',', $this->options) as $option) {
                    $html .= '<div class="form-check form-check-inline">';
                    $html .= '<input type="radio" name="q_' . $this->id . '" value="' . e($option) . '" class="form-check-input" required />';
                    $html .= '<label class="form-check-label">' . e($option) . '</label>';
                    $html .= '</div>';
                }
                break;

            case 3: // Checkbox Input
                foreach (explode(',', $this->options) as $option) {
                    $html .= '<div class="form-check">';
                    $html .= '<input type="checkbox" name="q_' . $this->id . '[]" value="' . e($option) . '" class="form-check-input" />';
                    $html .= '<label class="form-check-label">' . e($option) . '</label>';
                    $html .= '</div>';
                }
                break;

            case 4: // Date Input
                $html .= '<input type="date" name="q_' . $this->id . '" class="form-control" />';
                break;

            case 5: // DateTime Input
                $html .= '<input type="datetime-local" name="q_' . $this->id . '" class="form-control" />';
                break;

            case 6: // Time Input
                $html .= '<input type="time" name="q_' . $this->id . '" class="form-control" />';
                break;

            default:
                $html .= '<input type="text" name="q_' . $this->id . '" class="form-control" />';
        }

        $html .= '</div><hr/>';
        return $html;
    }

 


    

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class);
    }
}
