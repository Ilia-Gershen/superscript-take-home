<?php

  // Provide or not
  // 1. Check the persons name matches a director of the company
  // 2. Check the insolvency history
  // 3. Display positive or negative message

  //Test Data:
  // api key: 22f3cad1-f159-42c6-ab02-c49f3d23e603
  // example company: 49077016
  // test name: DIRECTOR, Test

function getCompanyData($companyNumber, $authToken) {
    $url = "https://api-sandbox.company-information.service.gov.uk/company/$companyNumber";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: $authToken",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        throw new Exception('Error: ' . curl_error($ch));
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        throw new Exception("HTTP error code: $httpCode");
    }

    return json_decode($response, true);
}

function getCompanyOfficers($companyNumber, $authToken) {
    $url = "https://api-sandbox.company-information.service.gov.uk/company/$companyNumber/officers";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: $authToken",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        throw new Exception('Error: ' . curl_error($ch));
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        throw new Exception("HTTP error code: $httpCode");
    }

    return json_decode($response, true);
}

function handleRequest($companyNumber, $name, $authToken) {
    $companyData = getCompanyData($companyNumber, $authToken);

    if ($companyData['has_insolvency_history'] === true) {
        return 'bad_company.php';
    }

    $officersData = getCompanyOfficers($companyNumber, $authToken);

    if ($officersData['items'][0]['name'] !== $name) {
        return 'bad_company.php';
    }

    return 'good_company.php';
}
  

// $answer = handleRequest($_POST['company_number'], $_POST['name']);
// header("Location: $answer");

$companyNumber = $_POST['company_number'] ?? null; // Get the company number from the form
$name = $_POST['name'] ?? null;                   // Get the director's name from the form
$authToken = "2db8c21c-2e14-4973-ab5d-a3b8a0ffd89a"; // Your API authorization token

// Validate input
if (empty($companyNumber) || empty($name)) {
    header("Location: error.php");
    exit();
}

// Call the handleRequest function
try {
    $redirectPage = handleRequest($companyNumber, $name, $authToken);

    // Redirect to the appropriate page
    header("Location: $redirectPage");
    exit();
} catch (Exception $e) {
    // Handle errors gracefully
    error_log("Error: " . $e->getMessage());
    header("Location: error.php");
    exit();
}

?>