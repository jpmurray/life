@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Sleep</div>

                <div class="panel-body">
                    <div class="alert alert-info">
                        Here you can log a night of sleep. Try to do this every morning, get a routine!
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ route('sleep.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" required autofocus value="{{ Cake\Chronos\Date::yesterday() }}">

                                <span class="help-block">
                                    This should be the date you went to sleep.
                                </span>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('energyAtNight') ? ' has-error' : '' }}">
                            <label for="energyAtNight" class="col-md-4 control-label">How whre you feeling at bedtime?</label>

                            <div class="col-md-6">
                                <input id="energyAtNight" type="number" class="form-control" name="energyAtNight" min="1" max="10" value="{{ old('energyAtNight') }}" required>

                                <span class="help-block">
                                    1 is crap, 10 is awesome.
                                </span>

                                @if ($errors->has('energyAtNight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('energyAtNight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('anxietyLevel') ? ' has-error' : '' }}">
                            <label for="anxietyLevel" class="col-md-4 control-label">Any traces of anxiety</label>

                            <div class="col-md-6">
                                <input id="anxietyLevel" type="number" class="form-control" name="anxietyLevel" min="0" max="10" value="{{ old('anxietyLevel') }}" required>

                                <span class="help-block">
                                    0 is no traces at all, at 10 you had an episode big enough to get you up.
                                </span>

                                @if ($errors->has('anxietyLevel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anxietyLevel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('timesAwaken') ? ' has-error' : '' }}">
                            <label for="timesAwaken" class="col-md-4 control-label">Woke up how many time?</label>

                            <div class="col-md-6">
                                <input id="timesAwaken" type="number" class="form-control" name="timesAwaken" value="{{ old('timesAwaken') }}" required>

                                @if ($errors->has('timesAwaken'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('timesAwaken') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('energyInMorning') ? ' has-error' : '' }}">
                            <label for="energyInMorning" class="col-md-4 control-label">How's you energy in the morning?</label>

                            <div class="col-md-6">
                                <input id="energyInMorning" type="number" class="form-control" name="energyInMorning" min="1" max="10" value="{{ old('energyInMorning') }}" required>

                                <span class="help-block">
                                    1 is crap, 10 is awesome.
                                </span>

                                @if ($errors->has('energyInMorning'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('energyInMorning') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dreams') ? ' has-error' : '' }}">
                            <label for="dreams" class="col-md-4 control-label">Remember any dreams?</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="dreams" name="dreams" rows="4" cols="50"></textarea>

                                @if ($errors->has('dreams'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dreams') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
