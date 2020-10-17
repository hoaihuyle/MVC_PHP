<?php 

require(ROOT . 'Models/DAO/companyDAO.php');

class CompanyService extends Service
{

    /**
     * List all company
     */
    function listCompany($db)
    {
        $company = new CompanyDAO();
        $companies =  $company->fetchAll($db); 
     
        return $companies;
    }

    /** 
     * List company by ID
     */
    function findCompany($db, $id)
    {
        $company = new CompanyDAO();
        $companies =  $company->fetchByCol($db, $id); 

        return $companies;
    }

     /** 
     * Update company by ID
     */
    function editCompany($db, $id,$data)
    {
        $company = new CompanyDAO();
        $companies =  $company->update($db, $id, $data ); 

        return $companies;
    }

    /** 
     * Create company
     */
    function createCompany($db, $data)
    {
        $company = new CompanyDAO();
        $companies =  $company->insert($db, $data ); 

        return $companies;
    }

    /** 
     * Delete company by ID
     */
    function deleteCompany($db, $id)
    {
        $company = new CompanyDAO();
        $companies =  $company->delete($db, $id); 

        return $companies;
    }
}

?>