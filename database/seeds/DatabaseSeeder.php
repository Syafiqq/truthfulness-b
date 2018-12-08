<?php

class DatabaseSeeder extends RollbackAbleSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->with(true)->call('AnswerDetailsSeeder');
        $this->with(true)->call('AnswerResultsSeeder');
        $this->with(true)->call('AnswersSeeder');
        $this->with(true)->call('CouponSeeder');
        $this->with(true)->call('QuestionsSeeder');
        $this->with(true)->call('QuestionOptionsSeeder');
        $this->with(true)->call('QuestionFavoursSeeder');
        $this->with(true)->call('QuestionCategoriesSeeder');
        $this->with(true)->call('UserCounselorsSeeder');
        $this->with(true)->call('UserStudentsSeeder');
        $this->with(true)->call('UserSeeder');


        $this->with(false)->call('UserStudentsSeeder');
        $this->with(false)->call('UserCounselorsSeeder');
        $this->with(false)->call('QuestionCategoriesSeeder');
        $this->with(false)->call('QuestionFavoursSeeder');
        $this->with(false)->call('QuestionOptionsSeeder');
        $this->with(false)->call('QuestionsSeeder');
        $this->with(false)->call('CouponSeeder');
        $this->with(false)->call('AnswersSeeder');
        $this->with(false)->call('AnswerResultsSeeder');
        $this->with(false)->call('AnswerDetailsSeeder');
    }
}
