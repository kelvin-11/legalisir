@extends('layout.navbar')

@section('content')
<div class="container">
    <div class="row align-items-center" style="height: 100vh;">
        <div class="col-lg-12">
            <div class="card ">
                <div class="row mt-3">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">
                        <div class="text-center mt-3">
                            <h2><b>SMKN 1 JENANGAN</b></h2>
                            <h4>JL.Niken Gandini NO.98</h4>
                            <h4>Plampitan, Kec.Jenangan, Kab.Ponorogo, Prov.Jawa Timur</h4>
                            <h4>Telp. (0352) 481236</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <hr>
                @foreach($pengiriman as $pr)
                <div class="row mt-2">
                    <div class="col-lg-6" style="margin-left: 20vh;">
                        <div class=" mb-3">
                            <h5><b>No Resi : {{ $pr->No_Resi }}</b></h5>
                            <h5><b>Alamat : {{ $pr->alamat }}</b></h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms-5 mb-3">
                            <h5><b>Tgl Pengiriman : {{ date('d-m-Y', strtotime($pr->created_at)) }}</b></h5>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Nama Penerima</th>
                                    <th>Jumlah Cetak</th>
                                    <th>Biaya Pengiriman</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengiriman as $p)
                                <tr>
                                    <th>{{ $p->ijasah->nama }}</th>
                                    <th>{{ $p->jml_cetak }}</th>
                                    <th>Rp. {{ number_format($p->ongkos) }}</th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection