@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
<style>

        .rating{
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: .5rem;
            font-size: 2rem;
            color: #FFBD13;
            margin-bottom: 2rem;
        }
        .rating .star{
            cursor: pointer;
        }
        .rating .star.active{
            opacity: 0;
            animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
        }
        @keyframes animate{
            0%{
                opacity: 0;
                transform: scale(1);
            }
            50%{
                opacity: 1;
                transform: scale(1.2);
            }
            100%{
                opacity: 1;
                transform: scale(1);
            }
        }
        .rating .star:hover{
            transform: scale(1.1);
        }
        textarea{
            width: 100%;
            background: #F5F5F5;
            padding: 1rem;
            border-radius: .5rem;
            border: none;
            outline: none;
            resize: none;
        }
        .btn-group{
            display: flex;
            grid-gap: .5rem;
            align-items: center;
            width: 344px;
        }
        .btn-group .btn{
            padding: .75rem 1rem;
            border-radius: .5rem;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: .875rem;
            font-weight: 500;
        }
        .btn-group .btn.submit{
            background: #4383FF;
            color: #FFF;
        }
        .btn-group .btn.submit:hover{
            background: #3278FF;
        }
        .btn-group .btn.cancel{
            background: #FFF;
            color: red;
        }
        .btn-group .btn.cancel:hover{
            background: #F5F5F5;
        }
</style>
@endpush
@section('content')
<div class="layout-page mb-5" style="margin-top:130px; margin-left: 20px;">
    <div class="content-wrapper">
       <div class="container">
      <div class="card">
        <div class="card-header text-white" style="background-color:red;">
            <a href="{{ route('index') }}"><i style="font-size: 13px;" class="fa fa-chevron-left"></i>  <span><b>Back</b></span></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                   <div class="card shadow-lg p-3">
                      <div class="row">
                         <div class="col-md-12">
                            <h2 class="mt-3 text-danger text-center"><b>{{ $title ?? '' }}</b></h2>
                         </div>
                         <div class="col-md-12">
                         </div>
                      </div>
                <div class="table-responsive mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Order ID</th>
                              <th>Vehicle</th>
                              <th>Image</th>
                              <th>Amount</th>
                              <th>Purchased At</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $index=>$transaction)
                                                      <tr>
                             <td>{{ ++$index }}</td>
                             <td>{{ 'OR-'.($transaction->id + 10000) }}</td>
                             <td><a href="{{ route('detail',$transaction->vehicle->slug) }}">{{ isset($transaction->vehicle) ? $transaction->vehicle->title : '-' }}</a></td>
                             <td><a href="{{ route('detail',$transaction->vehicle->slug) }}"><img style="border-radius:10px;" height="70px" width="100px" src="{{ asset('upload/vehicle/'.mainImage($transaction->vehicle->id)) }}" alt=""></a></td>
                             <td>${{ number_format($transaction->amount) }}</td>
                             <td>{{ date('d M Y' , strtotime( $transaction->created_at ))}}</td>
                             <td><a target="blank"  href="{{route('booking.detail',$transaction->id)}}"> <i style="margin-right:5px" class="text-success fa fa-file-text "></i> </a>&nbsp;|&nbsp;
                             <button style="border: none; background-color: transparent;" data-bs-toggle="modal" data-bs-target="#reviews"> <i style="margin-right:5px" class="text-warning fa fa-star"></i> </button>
                            </td>
                            </tr>
















                          @empty
                          @endforelse
                        </tbody>
                     </table>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
       </div>
    </div>
</div>

</div>

<div class="modal fade" id="reviews" tabindex="-1" aria-labelledby="reviewsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-4 position-relative">
            <div class="text-end border-0">
                <!-- <h1 class="modal-title fs-5" id="depositLabel">Modal title</h1> -->
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deposit-modal">

                        <h4 class="text-center mb-4">Make a Review</h4>
                        <div class="wrapper">
                            <form action="{{ route('review.store') }}" method="POST">
                                @csrf
                                <div class="rating">
                                    <input type="radio" name="review" value="1" checked hidden>
                                    <i id="star1" class='fa fa-star-o star' style="--i: 0;">
                                    </i>
                                    <div id="star1Active"></div>
                                    <i id="star2" class='fa fa-star-o star' style="--i: 1;">
                                    </i>
                                    <div id="star2Active"></div>
                                    <i id="star3" class='fa fa-star-o star' style="--i: 2;">
                                    </i>
                                    <div id="star3Active"></div>
                                    <i id="star4" class='fa fa-star-o star' style="--i: 3;">
                                    </i>
                                    <div id="star4Active"></div>
                                    <i id="star5" class='fa fa-star-o star' style="--i: 4;">
                                    </i>
                                    <div id="star5Active"></div>
                                </div>
                                <textarea name="message" cols="30" rows="5" placeholder="Your message..." required></textarea>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button class="btn cancel">Cancel</button>
                                </div>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script>
            const allStar = document.querySelectorAll('.rating .star')
        allStar.forEach((item, idx)=> {
            item.addEventListener('click' , function(){
                let click = 0
                allStar.forEach(i=>{
                    i.classList.replace('fa-star','fa-star-o')
                    i.classList.remove('active')
                })
                for(let i=0; i<allStar.length; i++){
                    if(i <= idx){
                        allStar[i].classList.replace('fa-star-o','fa-star')
                        allStar[i].classList.add('active')
                    }else{
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            })
        })
</script>
<script>
    $(document).ready(function(){
        $('#star1').click(function(){
            $('#star1Active').show().html("<input checked type='radio' name='review' value='1' hidden >");
        })
        $('#star2').click(function(){
            $('#star2Active').show().html("<input checked type='radio' name='review' value='2' hidden >");
        })
        $('#star3').click(function(){
            $('#star3Active').show().html("<input checked type='radio' name='review' value='3' hidden >");
        })
        $('#star4').click(function(){
            $('#star4Active').show().html("<input checked type='radio' name='review' value='4' hidden >");
        })
        $('#star5').click(function(){
            $('#star5Active').show().html("<input checked type='radio' name='review' value='5' hidden >");
        })
    })
</script>
@endpush
