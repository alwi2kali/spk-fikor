@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">	

            <table id="basic-data-table" class="table table-striped table-hover table-bordered table-lg" style="width:100%">
                <thead>
                    <tr>
                        <th><h5>Komponen PKH</h5></th>
                    </tr>
                </thead>

                <tbody>
                     @foreach($mekanisme as $i)
                    <tr>
                        <td><img src="{{('assets/image/' . $i->image )}}"  width="100%"/></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection