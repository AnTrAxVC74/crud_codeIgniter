<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Products extends Controller
{

    public function index()
    {
        $product = new Producto();
        $datos['products'] = $product->orderBy('id', 'ASC')->findAll();
        return view('to_products/list_of_products', $datos);
    }

    public function add_product()
    {
        return view('to_products/create_form');
    }

    public function add_new_product()
    {
        $product = new Producto();

        if ($imagen=$this->request->getFile('imagen')) {
            $name_image = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $name_image);

            $datos=[
                'nombre'=>$this->request->getVar('nombre'),
                'descripcion'=>$this->request->getVar('descripcion'),
                'imagen'=>$name_image
            ];
            $product->insert($datos);
        }
        return $this->response->redirect(site_url('/list_pro'));
    }

    public function delete_product($id=null)
    {
        $product = new Producto();
        $data_name_product=$product->where('id', $id)->first();
        $liga='../public/uploads/'.$data_name_product['imagen'];
        unlink($liga);
        $product->where('id', $id)->delete($id);
        
        return $this->response->redirect(site_url('/list_pro'));
        
        
    }

    public function edit_product($id=null)
    {
        $product = new Producto();
        $datos['product'] = $product->where('id', $id)->first();
        return view('to_products/edit_form', $datos);
    }

    public function update_product()
    {
        $product = new Producto();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        $id= $this->request->getVar('id');
        $product->update($id, $datos);

        $valid= $this->validate([
            'imagen'=> [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]'
                ]
            ]);

        if ($valid) 
        {
            if ($imagen=$this->request->getFile('imagen')) 
            {

                $data_name_product=$product->where('id', $id)->first();
                $liga='../public/uploads/'.$data_name_product['imagen'];
                unlink($liga);

                $name_image = $imagen->getRandomName();
                $imagen->move('../public/uploads/', $name_image);
    
                $datos=['imagen'=>$name_image];
                $product->update($id,$datos);
            }
        }
        return $this->response->redirect(site_url('/list_pro'));
        
    }
}