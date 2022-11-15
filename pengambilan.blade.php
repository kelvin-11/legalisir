@extends('layout.navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8">
                            <h2><b>SMKN 1 JENANGAN</b></h2>
                            <h4>JL.Niken Gandini NO.98</h4>
                            <h4>Plampitan, Kec.Jenangan, Kab.Ponorogo, Prov.Jawa Timur</h4>
                            <h4>Telp. (0352) 481236</h4>
                        </div>
                        <div class="col-lg-2">
                                        
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach($pengambilan as $p)
                        <div class="div">
                            <h4 class="text-right">Ponorogo,{{ date('d-m-Y', strtotime($p->created_at)) }}</h4>
                            <h4><b>Nomor : </b>{{ $p->No_Resi }}</h4>
                            
                            <h4 class="text-center">Diberitahukan kepada {{ $p->ijasah->nama }} bahwasannya dapat melakukan pengambilan legalisir ijasah pada hari {{ $p->ambil }}</h4>
                            <h4>Nb: Untuk pembahasan lebih lanjut silahkan hubungi admin</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection