<?php

interface ReportGenerator
{
  public function generate();
}

class PdfReport implements ReportGenerator
{
  public function generate()
  {
    return "Generating PDF report...<br />";
  }
}

class ExcelReport implements ReportGenerator
{
  public function generate()
  {
    return "Generating Excel report...<br />";
  }
}

class ReportService
{
  private $reportGenerator;

  public function __construct(ReportGenerator $reportGenerator)
  {
    $this->reportGenerator = $reportGenerator;
  }

  public function generateReport()
  {
    return $this->reportGenerator->generate();
  }
}

$reportService = new ReportService(new PdfReport());
echo $reportService->generateReport();

$reportService = new ReportService(new ExcelReport());
echo $reportService->generateReport();
