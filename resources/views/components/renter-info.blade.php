<form action="{{route('set-renter')}}" id="formica" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Your company name</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="World Media Crew">
                    <p class="text-danger" id="comp-mistake"></p>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Telephone nummber</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="+3169898">
                    <p class="text-danger" id="tel-mistake"></p>
                    </div>
                </div>
                <div class="form-group">
                    
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="roomname">Address of your  main company <br><br></label>
                            <input type="text" class="form-control" id="add" name="add" placeholder="Ludenhorst 78, Rotterdam">
                            @if ($errors->has('add'))  <p style="color:red;">{{$errors->first('add')}}</p> @endif
                            <p class="text-danger" id="add-mistake"></p>
                    </div>
                
                    <div class="col">
                        <label for="roomname">Country<br><br><br></label>
                        <select  class="form-control border-warning bg-light andjicasel" id="sel_depart" name="country">   
                        <option value="0" class="form-control">Select country</option>                         
                                @foreach($countries as $c)
                                    <option value="{{$c->id}}" class="form-control">{{$c->name}}</option>
                                @endforeach
                        </select>
                        @if ($errors->has('country'))  <p style="color:red;">{{$errors->first('country')}}</p> @endif
                   </div>
                   
                    <div class="col" id="selectsub">
                    
                    <p class="text-warning" id="pandjica"><p>
                    <p class="text-danger" id="city-mistake"></p>
                    </div>
                </div>
                <div class="form-row">
                
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip">
                    </div>
                </div>
                <div class="form-group">
                   
                </div>
              
                <input type="submit" class="btn btn-primary" value="Insert information">
                </form>