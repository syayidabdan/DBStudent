@extends('layout.main')

    @section('navbar')
      {{-- login start --}}
      <div class="hero min-h-screen bg-base-200">
          <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
              <h1 class="text-5xl font-bold">{{ "$judulbesar" }}</h1>
              <p class="py-6">{{ "$subjudul" }}</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
              <form class="card-body" action="/home">
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Email</span>
                  </label>
                  <input type="email" placeholder="email" class="input input-bordered"  />
                </div>
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Password</span>
                  </label>
                  <input type="password" placeholder="password" class="input input-bordered" />
                  <label class="label">
                    <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                  </label>
                </div>
                <div class="form-control mt-6">
                  <a href="/home">
                    <button class="btn btn-primary">Login</button>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      {{-- login end --}}
    @endsection