@extends('layouts.main')

@section('title', 'Add Furniture')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Add Furniture</h1>
    </div>

<div class="d-flex justify-content-center">

    <form action="/addfurniture" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
      <table>
          <tr>
              <td>Name</td>
              <td> <input type="text" name="name" placeholder="Enter Name"> </td>
          </tr>
          <tr>
              <td>Price</td>
              <td><input type="text" name="price" placeholder="Enter Price"></td>
          </tr>
          <tr>
              <td>Type</td>
              <td>
                <select name="type">
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
                <select name="color">
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