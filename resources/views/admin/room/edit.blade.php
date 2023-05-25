<x-app-layout>
    @section('content')
        <div class="card card-primary m-5">
            <div class="card-header">
                <h3 class="card-title">Add Room</h3>
            </div>

            <form method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="RoomNO">Room No.</label>
                                    <input type="text" class="form-control" id="roomNo" placeholder="Room No."
                                        name="room_no" value="{{ $room->number }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Room type</label>
                                    <select name="type" id="status" class="custom-select">
                                        <option>Select Room type</option>
                                        @foreach ($types as $key => $type)
                                            <option value="{{ $key }}" {{ $room->type == $key ? 'selected' : '' }}>
                                                {{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" rows="3" name=description id=description placeholder="Enter ...">{{ $room->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="beds">No.of Beds</label>
                                <input type="number" class="form-control" id="beds" name="beds"
                                    value="{{ $room->beds }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="occupancy">Max occupancy</label>
                                <input type="number" class="form-control" id="occupancy" name="occupancy"
                                    value="{{ $room->occupancy }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ $room->price_per_hour }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status"> Status</label>
                                <select name="status" class="custom-select">
                                    <option>Status</option>
                                    @foreach ($statuses as $key => $status)
                                        <option value="{{$key}}" {{ $room->status == $key ? 'selected' : '' }}>{{$status}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    @endsection
</x-app-layout>
