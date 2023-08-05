<?php 

class BasicCalculator { //parent class
    private function sum(){
        echo "5";
    }

    public function result(){
        return "the result is". $this->sum();
    }
}

$cal = new BasicCalculator;

$cal->result();


//protected কে Object থেকে অ্যাক্সেস করা যাবে না । কিন্তু child_class ক্রিয়েট করে অ্যাক্সেস করা যাবে ।