<?php

class Posts_model extends CI_Model{

    public function __construct(){

        $this->load->database();
    }

    private function does_view_exists($viewName) {
        $query = $this->db->query("SHOW TABLES LIKE '$viewName'");
        return $query->num_rows() > 0;
    }

    public function get_posts_search($searchedWords, $limit = 0, $offset = 0){

        // Start creating Product 1 View
        $product_1_View = 'product_1_view';

        // Check if the view exists in the database
        $doesProduct_1_ViewExists = $this->does_view_exists($product_1_View);

        if (!$doesProduct_1_ViewExists) {
            $createViewQuery = "CREATE VIEW $product_1_View AS
                SELECT id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, 'Product 1' AS tableName
                FROM product_1";
            $this->db->query($createViewQuery);
        }

        // Start creating Product 2 View
        $product_2_View = 'product_2_view';

        // Check if the view exists in the database
        $doesProduct_2_ViewExists = $this->does_view_exists($product_2_View);

        if (!$doesProduct_2_ViewExists) {
            $createViewQuery = "CREATE VIEW $product_2_View AS
                SELECT id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, 'Product 2' AS tableName
                FROM product_2";
            $this->db->query($createViewQuery);
        }

        // Start creating Product 3 View
        $product_3_View = 'product_3_view';

        // Check if the view exists in the database
        $doesProduct_3_ViewExists = $this->does_view_exists($product_3_View);

        if (!$doesProduct_3_ViewExists) {
            $createViewQuery = "CREATE VIEW $product_3_View AS
                SELECT id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, 'Product 3' AS tableName
                FROM product_3";
            $this->db->query($createViewQuery);
        }

        // Start creating Product 4 View
        $product_4_View = 'product_4_view';

        // Check if the view exists in the database
        $doesProduct_4_ViewExists = $this->does_view_exists($product_4_View);

        if (!$doesProduct_4_ViewExists) {
            $createViewQuery = "CREATE VIEW $product_4_View AS
                SELECT id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, 'Product 4' AS tableName
                FROM product_4";
            $this->db->query($createViewQuery);
        }

        

        $keywords = explode(' ', $searchedWords);
        
        //query product 1 table
        $this->db->select('id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, tableName');

        $this->db->from('product_1_view');

        foreach ($keywords as $word) {
            $this->db->group_start();
            $this->db->like('first_name', $word);
            $this->db->or_like('last_name', $word);
            $this->db->or_like('address', $word);
            $this->db->or_like('serial_number', $word);
            $this->db->or_like('transaction_type', $word);
            $this->db->or_like('date_of_purchase', $word);
            $this->db->or_like('email', $word);
            $this->db->or_like('technician', $word);
            $this->db->or_like('remarks', $word);
            $this->db->or_like('tableName', $word);
            // $this->db->or_like('tableName', $word, 'both');
            // Add more columns if needed
            $this->db->group_end();
        }

        $query1 = $this->db->get_compiled_select();

        //query product 2 table
        $this->db->select('id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, tableName');

        $this->db->from('product_2_view');

        foreach ($keywords as $word) {
            $this->db->group_start();
            $this->db->like('first_name', $word);
            $this->db->or_like('last_name', $word);
            $this->db->or_like('address', $word);
            $this->db->or_like('serial_number', $word);
            $this->db->or_like('transaction_type', $word);
            $this->db->or_like('date_of_purchase', $word);
            $this->db->or_like('email', $word);
            $this->db->or_like('technician', $word);
            $this->db->or_like('remarks', $word);
            $this->db->or_like('tableName', $word);
            // Add more columns if needed
            $this->db->group_end();
        }

        $query2 = $this->db->get_compiled_select();

        //query product 3 table
        $this->db->select('id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, tableName');

        $this->db->from('product_3_view');

        foreach ($keywords as $word) {
            $this->db->group_start();
            $this->db->like('first_name', $word);
            $this->db->or_like('last_name', $word);
            $this->db->or_like('address', $word);
            $this->db->or_like('serial_number', $word);
            $this->db->or_like('transaction_type', $word);
            $this->db->or_like('date_of_purchase', $word);
            $this->db->or_like('email', $word);
            $this->db->or_like('technician', $word);
            $this->db->or_like('remarks', $word);
            $this->db->or_like('tableName', $word);
            // Add more columns if needed
            $this->db->group_end();
        }

        $query3 = $this->db->get_compiled_select();

        //query product 4 table
        $this->db->select('id, first_name, last_name, address, serial_number, transaction_type, date_of_purchase, email, technician, remarks, tableName');

        $this->db->from('product_4_view');

        foreach ($keywords as $word) {
            $this->db->group_start();
            $this->db->like('first_name', $word);
            $this->db->or_like('last_name', $word);
            $this->db->or_like('address', $word);
            $this->db->or_like('serial_number', $word);
            $this->db->or_like('transaction_type', $word);
            $this->db->or_like('date_of_purchase', $word);
            $this->db->or_like('email', $word);
            $this->db->or_like('technician', $word);
            $this->db->or_like('remarks', $word);
            $this->db->or_like('tableName', $word);
            // Add more columns if needed
            $this->db->group_end();
        }

        $query4 = $this->db->get_compiled_select();

        // Combine the queries using UNION
        $unionQuery = $query1 . ' UNION ' . $query2 . ' UNION ' . $query3 . ' UNION ' . $query4;

        $combinedQueryWithLimit = $unionQuery . ' LIMIT ';

        $combinedQueryWithLimit = $unionQuery . ' ORDER BY last_name, first_name';

        if ($limit > 0) {
            $combinedQueryWithLimit .= ' LIMIT ' . $limit;
            
            if ($offset > 0) {
                $combinedQueryWithLimit .= ' OFFSET ' . $offset;
            }
        }

        // Execute the combined query
        $query = $this->db->query($combinedQueryWithLimit);
        
        return $query->result_array();

       
    }

    public function search_deleted_logs ($searchedWords, $limit = 0, $offset = 0){

        $keywords = explode(' ', $searchedWords);
        //get deleted logs header names
        $columns = $this->db->list_fields('deleted_logs');
        // Convert the array of column names to a comma-separated string
        $deletedLogHeaders = implode(', ', $columns);


        $this->db->select($deletedLogHeaders);
        $this->db->from('deleted_logs');
        $startKey = 'user';
        $start = false;

        foreach($keywords as $word) {
            $this->db->group_start();
            $this->db->like('timeStamp', $word);
            foreach($columns as $columnHeader) {
                if ($columnHeader === $startKey) {
                    $start = true;
                }
                if ($start) {
                    $this->db->or_like($columnHeader, $word);
                }
            }
            $this->db->group_end();  
        }
        $query = $this->db->get_compiled_select();
        $queryWithLimit = $query . ' LIMIT ';
        $queryWithLimit = $query . ' ORDER BY timeStamp DESC';

        if ($limit > 0) {
            $queryWithLimit .= ' LIMIT ' . $limit;
            
            if ($offset > 0) {
                $queryWithLimit .= ' OFFSET ' . $offset;
            }
        }
        $executeQuery = $this->db->query($queryWithLimit);
        return $executeQuery->result_array();
    }


    public function get_posts_single($param1, $param2){

        $this->db->where('id', $param2);
        $result = $this->db->get($this->db->escape_identifiers($param1));

        return $result->row_array();
    }

    public function get_posts_edit($boxType, $id){

        $this->db->where('id', $id);
        $result = $this->db->get($this->db->escape_identifiers($boxType));

        return $result->row_array();
    }

    public function get_edit_history($boxType, $queryID, $limit = 0, $offset = 0){
        
        $this->db->where('recordID', $queryID);

        if ($limit > 0) {
            $this->db->limit($limit, 0);
            
            if ($offset > 0){
                $this->db->limit($limit, $offset);
            }
        } 

        $this->db->order_by('timeStamp', 'DESC'); // Order by date in descending order (newest first)

        switch ($boxType) {
            case "gpinoy":
                $query = $this->db->get('gpinoy_edit_logs');
                break;
            case "gsathd":
                $query = $this->db->get('gsathd_edit_logs');
                break;
            case "cignal":
                $query = $this->db->get('cignal_edit_logs');
                break;
            case "satlite":
                $query = $this->db->get('satlite_edit_logs');
                break;
        }
    
        return $query->result_array();


    }
    

    

    function convertToMySQLDate($day, $month, $year) {
        return $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT);
    }
    

    public function insert_post(){

        $boxtype = $this->input->post('boxtype');

        if ($boxtype == "gpinoy") {
            // Assuming you have retrieved the day, month, and year values from the form
            $day = $this->input->post('day');
            $month = $this->input->post('month');
            $year = $this->input->post('year');

            // Convert the date to MySQL date format
            $dateOfPurchase = $this->convertToMySQLDate($day, $month, $year);


            $data = array(
                'firstName' => strtoupper($this->input->post('firstname')),
                'lastName' => strtoupper($this->input->post('lastname')),
                'address' => $this->input->post('address'),
                'boxNumber' => $this->input->post('boxnumber'),
                'chipid' => $this->input->post('chipid'),
                'transactionType' => $this->input->post('transactiontype'),
                'dateOfPurchase' => $dateOfPurchase, // Insert the prepared date here
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks')
            );

            return $this->db->insert('gpinoy', $data);

        } else if ($boxtype == "gsathd") {

            $day = $this->input->post('day');
            $month = $this->input->post('month');
            $year = $this->input->post('year');

            $dateOfPurchase = $this->convertToMySQLDate($day, $month, $year);

            $data = array(
                'firstName' => strtoupper($this->input->post('firstname')),
                'lastName' => strtoupper($this->input->post('lastname')),
                'address' => $this->input->post('address'),
                'boxNumber' => $this->input->post('boxnumber'),
                'chipid' => $this->input->post('chipid'),
                'transactionType' => $this->input->post('transactiontype'),
                'dateOfPurchase' => $dateOfPurchase,
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks')
            );

            return $this->db->insert('gsathd', $data);

        } else if ($boxtype == "cignal") {

            $day = $this->input->post('day');
            $month = $this->input->post('month');
            $year = $this->input->post('year');

            $dateOfPurchase = $this->convertToMySQLDate($day, $month, $year);

            $data = array(
                'firstName' => strtoupper($this->input->post('firstname')),
                'lastName' => strtoupper($this->input->post('lastname')),
                'address' => $this->input->post('address'),
                'boxNumber' => $this->input->post('boxnumber'),
                'cca' => $this->input->post('cca'),
                'stb' => $this->input->post('stb'),
                'transactionType' => $this->input->post('transactiontype'),
                'dateOfPurchase' => $dateOfPurchase,
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks')
            );

            return $this->db->insert('cignal', $data);

        } else if ($boxtype == "satlite") {

            $day = $this->input->post('day');
            $month = $this->input->post('month');
            $year = $this->input->post('year');

            $dateOfPurchase = $this->convertToMySQLDate($day, $month, $year);

            $data = array(
                'firstName' => strtoupper($this->input->post('firstname')),
                'lastName' => strtoupper($this->input->post('lastname')),
                'address' => $this->input->post('address'),
                'boxNumber' => $this->input->post('boxnumber'),
                'cca' => $this->input->post('cca'),
                'stb' => $this->input->post('stb'),
                'transactionType' => $this->input->post('transactiontype'),
                'dateOfPurchase' => $dateOfPurchase,
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks')
            );

            return $this->db->insert('satlite', $data);
        } 

    }

    public function createEditLogEntry($boxType, $recordID, $boxNumber, $field, $oldValue, $newValue) {

        $timeStamp = date('Y-m-d H:i:s');
        $user = $this->session->firstname;

            $data = array(

                'recordID' => $recordID,
                'boxNumber' => $boxNumber,
                'timeStamp' => $timeStamp,
                'user' => $user,
                'fieldName' => $field,
                'oldValue' => $oldValue,
                'newValue' => $newValue,
                /*changeDescription' => $changeDescription,*/
            );

        switch ($boxType) {
            case "gpinoy":
                return $this->db->insert('gpinoy_edit_logs', $data);
                break;
            case "gsathd":
                return $this->db->insert('gsathd_edit_logs', $data);
                break;
            case "cignal":
                return $this->db->insert('cignal_edit_logs', $data);
                break;
            case "satlite":
                return $this->db->insert('satlite_edit_logs', $data);
                break;
        }
    
}

    public function update_post_with_edit_log($boxType, $boxNumber, $id){

        // Retrieve current record from the database "old value"
        $currentRecord = $this->get_posts_edit($boxType, $id);

        $recordID = $this->input->post('id');

        //new value
        $formData = array(
            'firstName' => strtoupper($this->input->post('firstname')),
            'lastName' => strtoupper($this->input->post('lastname')),
            'address' => $this->input->post('address'),
            'dateOfPurchase' => $this->input->post('dateofpurchase'),
            'contact' => $this->input->post('contact'),
            'installer' => $this->input->post('installer'),
            'remarks' => $this->input->post('remarks'),
            'transactionType' => $this->input->post('transactiontype')
        );

        // Compare each field in the form with the corresponding field in the database record
        foreach ($formData as $field => $newValue) {
            $oldValue = $currentRecord[$field];

        if ($oldValue !== $newValue) {
            $this->createEditLogEntry($boxType, $recordID, $boxNumber, $field, $oldValue, $newValue);
            }
        }

        // Update the database with the new form data
        $this->db->where('id', $recordID);
        //$this->db->update('gpinoy', $formData);
        $this->db->update($boxType, $formData);

    }



    public function update_post(){

        $boxtype = $this->input->post('boxtype');

        if ($boxtype == "gpinoy") {

            $id = $this->input->post('id');

            //from the submitted form   
            $data = array(
                'firstName' => $this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'dateOfPurchase' => $this->input->post('dateofpurchase'),
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks'),
                'transactiontype' => $this->input->post('transactiontype')
            );

            $this->db->where('id', $id);
            $this->db->update('gpinoy', $data);

        } else if ($boxtype == "gsathd") {
            
            $id = $this->input->post('id');

            $data = array(
                'firstName' => $this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'dateOfPurchase' => $this->input->post('dateofpurchase'),
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks'),
                'transactiontype' => $this->input->post('transactiontype')
            );
            $this->db->where('id', $id);
            $this->db->update('gsathd', $data);

        } else if ($boxtype == "cignal") {
            
            $id = $this->input->post('id');

            $data = array(
                'firstName' => $this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'dateOfPurchase' => $this->input->post('dateofpurchase'),
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks'),
                'transactiontype' => $this->input->post('transactiontype')
            );
            $this->db->where('id', $id);
            $this->db->update('cignal', $data);

        } else if ($boxtype == "satlite") {
            
            $id = $this->input->post('id');

            $data = array(
                'firstName' => $this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'dateOfPurchase' => $this->input->post('dateofpurchase'),
                'contact' => $this->input->post('contact'),
                'installer' => $this->input->post('installer'),
                'remarks' => $this->input->post('remarks'),
                'transactiontype' => $this->input->post('transactiontype')
            );
            $this->db->where('id', $id);
            $this->db->update('satlite', $data);
        } 
        

       }    


    public function delete_post() {

        $boxType = $this->input->post('boxtype');
        $id = $this->input->post('id');

        //get the uncommon column names
        $timeStamp = date('Y-m-d H:i:s');
        $user = $this->session->firstname;

        if ($this->input->post('remarks')) {
            $reason = $this->input->post('remarks');
        } else { 
            $reason = $this->input->post('deletereason');
        }

        //get the deleted items
        $data = $this->get_posts_single($boxType, $id);
        
        $targetTable = 'deleted_logs';

        $dataToInsert = [
            'recordID' => $id,
            'timeStamp' => $timeStamp,
            'user' => $user,
            'reason' => $reason,
            'boxType' => $boxType,
        ];

        $startKey = 'lastName';
        $start = false;

        foreach ($data as $key => $value) {
            if ($key === $startKey) {
                $start = true;
            }
        
            if ($start) {
                // You're now looping through keys from 'lastName' to the end
                $dataToInsert[$key] = $value;
            }
        }

        $this->db->insert($targetTable, $dataToInsert);

        switch ($boxType) {
            case 'gpinoy':
                $this->db->where('id', $id);
                $this->db->delete('gpinoy');
                break;
            case 'gsathd':
                $this->db->where('id', $id);
                $this->db->delete('gsathd');
                break;
            case 'cignal':
                $this->db->where('id', $id);
                $this->db->delete('cignal');
                break;
            case 'satlite':
                $this->db->where('id', $id);
                $this->db->delete('satlite');
                break;
        }
    
}

    public function get_deleted_records($limit = 0, $offset = 0){

        if ($limit > 0) {
            $this->db->limit($limit, 0);
            
            if ($offset > 0){
                $this->db->limit($limit, $offset);
            }
        } 

        $this->db->order_by('timeStamp', 'DESC');

        $query = $this->db->get('deleted_logs');

        return $query->result_array();
    }


    public function login() {

        $this->db->where('email', $this->input->post('username', true));
        $this->db->where('password', $this->input->post('password', true));
        $result = $this->db->get('user');

        if($result->num_rows() == 1) {

            return $result->row_array();

        }else{

            return false;
        }
    }

} 