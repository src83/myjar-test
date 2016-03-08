<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Loans extends Controller_BaseLoans {

    public function action_index() {

        // The base layout loaded in a parent class Controller_BaseLoans

        $this->template->application_name = 'MyJar';
        $this->template->description = 'test task';
        $this->template->keywords = 'any key words';

    }


    public function api() {
        # /api/v1/loan/request_loan
        # /api/v1/client/get_loan_request_data
        # /api/v1/client/update_client_fields
        # /api/v1/client/get_update_fields
    }


}
