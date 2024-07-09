<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::with('enrollment.student', 'enrollment.batch')->find($pid);

        // Check if payment exists
        if (!$payment) {
            abort(404, 'Payment not found');
        }

        $pdf = \App::make('dompdf.wrapper');

        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1 align='center'> Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No : <b> $pid - </b> </p>";
        $print .= "<p> Date : <b> {$payment->paid_date} - </b></p>";

        // Check if enrollment exists
        if ($payment->enrollment) {
            $print .= "<p> Enrollment No : <b> {$payment->enrollment->enroll_no} - </b></p>";

            // Check if student exists
            if ($payment->enrollment->student) {
                $studentName = $payment->enrollment->student->Firstname . ' ' . $payment->enrollment->student->Lastname;
                $print .= "<p> Student Name : <b> {$studentName} - </b></p>";
            } else {
                $print .= "<p> Student Name : <b> - </b></p>";
            }

            // Check if batch exists
            if ($payment->enrollment->batch) {
                $print .= "<table style='width: 100%;'>";
                $print .= "<tr>";
                $print .= "<td>Description</td>";
                $print .= "<td>Amount</td>";
                $print .= "</tr>";
                $print .= "<tr>";
                $print .= "<td> <h3> {$payment->enrollment->batch->name} - </h3> </td>";
                $print .= "<td> <h3> {$payment->amount} - </h3> </td>";
                $print .= "</tr>";
                $print .= "</table>";
            } else {
                $print .= "<p> Description : <b> - </b></p>";
                $print .= "<p> Amount : <b> {$payment->amount} - </b></p>";
            }
        } else {
            $print .= "<p> Enrollment No : <b> - </b></p>";
            $print .= "<p> Student Name : <b> - </b></p>";
            $print .= "<p> Description : <b> - </b></p>";
            $print .= "<p> Amount : <b> {$payment->amount} - </b></p>";
        }

        $print .= "<hr/>";

        // Check if the user is authenticated
        if (Auth::check()) {
            $userName = Auth::user()->name;
        } else {
            $userName = 'Guest'; // Or handle accordingly if not authenticated
        }

        $print .= "<div>";
        $print .= "<span> Printed By: <b> " . $userName . " - </b> </span>";
        $print .= "<span> Printed Date: <b>" . date('Y-m-d') . "</b> </span>";
        $print .= "</div>";
        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
