<?php 

$db = new Database();
require(ROOT . 'Models/DAO/accountDAO.php');
class AccountService extends Service{

    
    /**
     * List all account
     */
    function listAccount($db){

        $account = new AccountDAO();
        $accounts =  $account->fetchAll($db); 
        return $accounts;
    }

    /** 
     * List account by ID
     */
    function findAccount($db, $id){
        $account = new AccountDAO();
        $accounts =  $account->fetchByCol($db, $id); 

        return $accounts;
    }

     /** 
     * Update account by ID
     */
    function editAccount($db, $id,$data){
        $account = new AccountDAO();
        $accounts =  $account->update($db, $id, $data ); 

        return $accounts;
    }

    /** 
     * Create account
     */
    function createAccount($db, $data){
        $account = new AccountDAO();
        $accounts =  $account->insert($db, $data ); 

        return $accounts;
    }

    /** 
     * Delete account by ID
     */
    function deleteAccount($db, $id){
        $account = new AccountDAO();
        $accounts =  $account->delete($db, $id); 

        return $accounts;
    }

    function checkUser($db, $id){
        $account = new AccountDao();
        return $account->checkUser($db, $id);
    }

    function checkEmail($db,$table, $request){
        $account = new AccountDao();
        return $account->checkEmail($db, $table, $request);
      }
}

?>