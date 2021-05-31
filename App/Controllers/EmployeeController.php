<?php
namespace App\Controllers;

use App\Core\Connection;
use App\Models\Employee;
use App\Views\EmployeeView;
use App\Requests\EmployeeCreateRequest;
use App\Core\Session;

class EmployeeController{

        public function createPage(){
            $createPage = new EmployeeView();
            $createPage->showView('employee/create.tpl');
        }

        public function create(){
            $newEmployee = new Employee();
            $dataForm = new EmployeeCreateRequest();
            if($dataForm->validateData())
                if($newEmployee->create($dataForm->getDataRequest()))
                    echo "salvo com sucesso";
        }

        public function showEmployeesPage(){
            $employees = new Employee();
            $employees = $employees->all();
            $showPage = new EmployeeView();
            $showPage->addDataToView('employees', $employees);
            $showPage->showView('employee/showAll.tpl');
        }

        public function showEmployeePage($data){
            $employee = new Employee();
            $employee = $employee->findById($data[0]);
            $showPage = new EmployeeView();
            $showPage->addDataToView('employee', $employee);
            $showPage->showView('employee/showOne.tpl');
        }
}