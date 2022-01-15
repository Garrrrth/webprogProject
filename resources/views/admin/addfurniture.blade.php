@extends('layouts.main')

@section('title', 'Home')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Add Furniture</h1>
    </div>

<div class="d-flex justify-content-center">

    <form action="/confirmadd" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
      <table>
          <tr>
              <td>Name</td>
              <td> <input type="text" name="Name" placeholder="Enter Name"> </td>
          </tr>
          <tr>
              <td>Price</td>
              <td><input type="text" name="Price" placeholder="Enter Price"></td>
          </tr>
          <tr>
              <td>Type</td>
              <td>
                <select>
                    <option value=”accessories”>Accessories</option>
                    <option value=”bed”>Bed</option>
                    <option value=”chair”>Chair</option>
                    <option value=”table”>Table</option>
                </select>

              </td>
              
          </tr>
          <tr>
            <td>Color</td>
            <td>
                <select>
                    <option value=”black”>Black</option>
                    <option value=”green”>Green</option>
                    <option value=”red”>Red</option>
                    <option value=”white”>White</option>
                </select>
            </td>
        </tr>
          <tr>
              <td>Image</td>
              <td>
                <input type="file" name="image" >
              </td>
          </tr>
      </table>

      <button type="submit">Add Furniture</button>
  </form>

</div>
@endsection