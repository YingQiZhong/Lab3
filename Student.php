<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author 84054
 */
class Student {
    //put your code here
    function __construct() { 
        $this->surname = 'Zhong';
        $this->first_name = 'Ying Qi';
        $this->emails = array('840545482@qq.com'); 
        $this->grades = array('set 2'); 
    }
    
    function add_email($which,$address) { 
        $this->emails[$which] = $address;
        } 
        function add_grade($grade) { 
            $this->grades[] = $grade;
            } 
    function average() {
        $total = 0; 
        foreach ($this->grades as $value)
            $total += $value; 
        return $total / count($this->grades);
        } 
 
    function toString() { 
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) 
        $result .= $which . ': '. $what. "\n"; 
        $result .= "\n"; 
        return '<pre>'.$result.'</pre>';
        }
 
    } 
 
