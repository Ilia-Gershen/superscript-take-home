<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/my_php_project/submit-form.php';
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    public function testCompanyWithValidData()
    {

        $result = handleRequest('49077016', 'DIRECTOR, Test', '2db8c21c-2e14-4973-ab5d-a3b8a0ffd89a');

        $this->assertEquals('good_company.php', $result);
    }

    public function testCompanyWithInvalidDirectorName()
    {

        $result = handleRequest('49077016', 'i', 'mock_auth_token');

        $this->assertEquals('bad_company.php', $result);
    }

    public function testCompanyWithInvalidNumber()
    {

        $result = handleRequest('4', 'DIRECTOR, Test', 'mock_auth_token');

        $this->assertEquals('error.php', $result);
    }
}

?>