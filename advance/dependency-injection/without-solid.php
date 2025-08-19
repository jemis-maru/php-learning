<?php

class PdfReport
{
  public function generate()
  {
    return "Generating PDF report...<br />";
  }
}

class ExcelReport
{
  public function generate()
  {
    return "Generating Excel report...<br />";
  }
}

class ReportService
{
  private $reportGenerator;

  public function __construct($type)
  {
    if ($type === 'pdf') {
      $this->reportGenerator = new PdfReport();
    } elseif ($type === 'excel') {
      $this->reportGenerator = new ExcelReport();
    }
  }

  public function generateReport()
  {
    return $this->reportGenerator->generate();
  }
}

$reportService = new ReportService("pdf");
echo $reportService->generateReport();

$reportService = new ReportService("excel");
echo $reportService->generateReport();
