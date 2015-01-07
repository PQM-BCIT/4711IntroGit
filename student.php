<?php

/**
 * @file (student.php)
 * Student object.
 */

/**
 * Description of student
 *
 * @author Paolo
 */
class Student {

  /**
   * Constructor for Student object.
   */
  function __construct() {
    $this->surname    = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
  }

  /**
   * Add an email to the Student's description.
   * @param string $key     Key name for the email address.
   * @param string $address Represents email address.
   */
  function add_email($key, $address) {
    $this->emails[$key] = $address;
  }

  /**
   * Add a grade to the Student's report.
   * @param double $grade Represents the grade achieved.
   */
  function add_grade($grade) {
    $this->grades[] = $grade;
  }

  /**
   * Calculates the Student's average.
   * @return double Students average grade.
   */
  function average() {
    $total = 0;
    $avg   = 0;

    foreach ($this->grades as $value) {
      $total += $value;
    }

    $avg = $total / count($this->grades);

    return $avg;
  }

  /**
   * Provides the standard display for the Student object.
   * @return string standard display output.
   */
  function toString() {
    $result  = $this->first_name . ' ' . $this->surname;
    $result .= ' (' . $this->average() . ")\n";
    foreach ($this->emails as $key => $val) {
      $result .= $key . ': ' . $val . "\n";
    }
    $result .= "\n";

    return '<pre>' . $result . '</pre>';
  }

}
