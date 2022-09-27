<?php
/*Copyright (C) 2022 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/-*/
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::latest()->paginate(5);
        return view('productos.index',compact('productos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'detalles' => 'required',
            'precio' => 'required',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success','Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show',compact('producto'));
    }


    public function edit(Producto $producto)
    {
        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'detalles' => 'required',
            'precio' => 'required',
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success','Producto modificado exitosamente.');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado exitosamente.');
    }
}
