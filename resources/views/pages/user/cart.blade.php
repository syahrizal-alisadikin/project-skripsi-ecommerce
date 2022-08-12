@extends('layouts.app', ['titlePage' => 'Ecommerce - Cart ' ])

@section('content-page')
  <!-- Page Content -->
  <div class="page-content page-cart">
    <section
      class="store-breadcrumbs"
      data-aos="fade-down"
      data-aos-delay="100"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table
              class="table table-borderless table-cart"
              aria-describedby="Cart"
            >
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name Produk</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Menu</th>
                </tr>
              </thead>
              <tbody>
                @php $totalprice = 0 @endphp
                @forelse ($carts as $cart)
                   <tr>
                  <td >
                   @if ($cart->product->galleries->count())
                    <img
                      src="{{url('storage/'.$cart->product->galleries->first()->photos)}}"
                      alt=""
                      class="cart-image"
                    />
                   @endif
                  </td>
                  <td >
                    <div class="product-title">{{$cart->product->name}}</div>
                  </td>
                  <td >
                    <div class="product-title">{{ moneyFormat($cart->product->price)}}</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td >
                    <div class="product-title">{{$cart->quantity}} Pcs</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td >
                  <form action="{{route('delete-cart',$cart->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger mt-1">
                      Remove
                    </button>
                  </form>
                  </td>
                </tr> 
                @php $totalprice += $cart->product->price * $cart->quantity @endphp
                @empty
                   <tr class="text-center">
                     <td colspan="4">Tidak ada cart</td>
                   </tr>
                @endforelse
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Informasi Pengiriman</h2>
          </div>
        </div>
      <form action="" method="POST" id="locations" enctype="multipart/form-data">
        @csrf
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <input type="hidden" id="totalPrice" name="total_price" value="{{$totalprice}}">
            <input type="hidden" id="totalPay" name="total_pay" value="{{$totalprice}}">
            <div class="col-md-6">
              <div class="form-group">
                <label for="address_one">Alamat</label>
                <textarea name="address" id="address" class="form-control" cols="30" placeholder="Masukan Alamat pengiriman" rows="5">
                  {{old('address')}}
                </textarea>
              </div>
            </div>        
          <div class="col-md-4" >
              <div class="form-group" >
                <label for="phone_number">Phone Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone_number"
                  name="phone_number"
                />
              </div>
            </div>
           
          </div>
          <div class="row">
            <div class="col-md-4" >
              <div class="form-group" >
                <label for="country">Negara</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  readonly
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="fk_provinces_id"  id="select" v-if="provinces" v-model="provinces_id" class="form-control">
                <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                </select>
                <select v-else class="form-control"></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="fk_regencies_id">City</label>
               <select name="city_id" @change="GetCourier()"  id="select" v-if="regencies" v-model="city_id" class="form-control">
                <option v-for="regencie in regencies" :value="regencie.id">@{{ regencie.name }}</option>
                </select>
                <select v-else class="form-control"></select>
              </div>
            </div>
          </div>
          
         
         
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2>Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200" >
            <div class="col-4 col-md-2">
              <div class="product-title">$0</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$0</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title" id="courier_cost">$0</div>
              <div class="product-subtitle">Ship to <p id="tujuan"></p></div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success" id="totalPembayaran">{{ moneyFormat($totalprice ?? 0) }}</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3" v-if="checkout">
              <button
              type="submit"
              class="btn btn-success mt-4 px-4 btn-block"
              >
                Checkout Now
              </button>
            </div>
          </div>
        </div>
        </form>
    </section>
  </div>
@endsection

@push('after-script')
    <script src="{{ asset('assets/vendor/vue/vue.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script>
     $(document).ready(function() {
        // console.log('berhasil');
          $('.fk_provinces_id').select2();
      });
      </script> --}}
    <script>
     
      var locations = new Vue({
        el: "#locations",
        mounted() {
          AOS.init();
          this.getProvincesData()
        },
        data(){
          return{
         
          provinces:null,
          regencies:null,
          provinces_id:null,
          city_id:null,
          checkout:null,
          }
        },
        methods: {
        
          getProvincesData(){
            var self = this;
            axios.get('{{ route('api-provinces') }}')
                .then(function(response){
                  self.provinces = response.data;
                  
                });
            },
            getRegenciesData(){
                var self = this;
                
                axios.get('{{ url('user/regencies') }}/' + self.provinces_id)
                    .then(function(response){
                      // console.log(response.data)
                    self.regencies = response.data;
                     
              });
            }
        },
        watch: {
          provinces_id: function(val, oldVal){
            this.regencies_id=null;
            this.getRegenciesData();
          }
        },
      });
    </script>
@endpush
