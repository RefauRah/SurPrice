@extends('admina.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div>
            <div class="table-data__tool-right">
                <a href="{{route('produk.create')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button></a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>nama</th>
                        <th>kategori</th>
                        <th>asal</th>
                        <th>link</th>
                        <th>harga</th>
                        <th>image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($produk as $item)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{$item->nama_produk}}</td>
                        <td>{{$item->nama_kategori}}</td>
                        <td>{{$item->asal}}</td>
                        <td>{{$item->link}}</td>
                        <td>{{$item->harga}}</td>
                        <td><img src="{{  url('uploads/file/'.$item->image) }}" alt=""></td>
                        <td>
                            <div class="table-data-feature">
                            <form action="{{ route('produk.destroy',$item->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('produk.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
        </div>
    </div>
</div>
@endsection