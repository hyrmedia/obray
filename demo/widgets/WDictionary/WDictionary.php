<?php
	
    /***********************************************************************
	
    Obray - Super lightweight framework.  Write a little, do a lot, fast.
    Copyright (C) 2013  Nathan A Obray

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
    ***********************************************************************/
	
	if (!class_exists( 'OObject' )) { die(); }
	
	/********************************************************************************************************************
		
		WDictionary:	This is our controller object for our Dictionary application.
		
	********************************************************************************************************************/
	
	Class WDictionary extends OObject{
	   
	   public function output(){
	   
	       $this->dictionary = $this->route('/cmd/widgets/WDictionary/models/MDictionary/get/');
    	   $this->view = $this->route('/cmd/widgets/WDictionary/views/VDictionary/',$this->dictionary->data);
    	   $this->view->route('/setDelegate/?delegate='.urlencode('/cmd/widgets/WDictionary/'));
    	   $this->view->route('/output/',$this->dictionary->data);
    	   
	   }
	   
	   public function add($params){
	   
    	   $this->dictionary = $this->route('/cmd/widgets/WDictionary/models/MDictionary/add/?word=test&definition=test');
    	   
	   }
	   
	   public function delete($params){
	   
    	   $this->dictionary = $this->route('/cmd/widgets/WDictionary/models/MDictionary/delete/?word='.$params["word"]);
    	   
	   }
	    
		
		
	}
	
	
