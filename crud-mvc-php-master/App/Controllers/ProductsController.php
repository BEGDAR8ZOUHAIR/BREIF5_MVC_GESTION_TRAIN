<?php 



class ProductsController extends Controller 
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Products();
    }


    public function index()
    {
        $data['products'] = $this->conn->getAllProducts();
        return $this->view('products/index',$data);
    }





    public function add()
    {
        return $this->view('products/add');
    }

    public function store()
    {
        
        if(isset($_POST['submit']))
        {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $price = $_POST['price'];
            $availablePlaces = $_POST['availablePlaces'];

            
            $this->conn = new Products();
            $dataInsert = Array ( "from" => $from ,
                            "to" => $to ,
                            "price" => $price ,
                            "available places" => $availablePlaces 
                            );

            if($this->conn->insertProducts($dataInsert))
            {
                $data['success'] = "Data Added Successfully";
                return $this->view('products/add',$data);
            }
            else 
            {
                $data['error'] = "Error";
                return $this->view('products/add',$data);
            }
        }
        return $this->view('products/add');
    }




    public function edit($id)
    {
        // var_dump($this->conn->getProduct($id));
        $data['row'] = $this->conn->getProduct($id)[0];
        return $this->view('products/edit',$data);
    }

    public function update()
    {
        if(isset($_POST['submit']))
        {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $price = $_POST['price'];
            $availablePlaces = $_POST['availablePlaces'];
            $id = $_POST['submit'];

            $this->conn = new Products();
            $dataInsert = Array ( "from" => $from ,
                            "to" => $to ,
                            "price" => $price ,
                            "available places" => $availablePlaces 
                            );
            // data of product
            

            if($this->conn->updateProduct($id,$dataInsert))
            {
                $data['success'] = "Updated Successfully";
                $data['row'] = $this->conn->getProduct($id)[0];
                $this->view('products/edit',$data);
            }
            else 
            {
                $data['error'] = "Error";
                $data['row'] = $this->conn->getProduct($id)[0];
                return $this->view('products/edit',$data);
            }
        }
        redirect('home/index');
    }



    
    public function delete($id)
    {
        if($this->conn->deleteProduct($id))
        {
            $data['success'] = "Product Have Been Deleted";
            return $this->view('products/delete',$data);
        }
        else 
        {
            $data['error'] = "Error";
            return $this->view('products/delete',$data);
        }
    }
    
    public function login()
    {
        return $this->view('products/login');
    }
     
    public function regester()
    {
        return $this->view('products/regester');
    }

    public function contact()
    {
        return $this->view('products/contact');
    }
}