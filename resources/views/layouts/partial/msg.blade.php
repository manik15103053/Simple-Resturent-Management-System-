    @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              @if(session('successMeg'))
              <div class="alert-success"style="color:red">
                <button type="button"aria-hidden="true"class="close
                "onclick="this.parentElement.style.display='none'">x

                </button>
                <span><b> Save - </b>{{session('successMeg')}}</span>


              </div>
              @endif

           