@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
										<div>
											<h3>Current User Info:</h3>
											<div>Username: {{ Auth::user()->name }}</div>
											<div>Email: {{ Auth::user()->email }}</div>
										</div>
										<hr />
										<div>
											<h3>Previously Logged In Users</h3>
											<div>
												<table border="1" width="650">
													<tr align="center">
														<th>Username</th>
														<th>E-mail</th>
														<th>Registered Date</th>
													</tr>
													<?php
														foreach($users as $user){
															echo '<tr>';
															echo '<td>' . $user->name . '</td>';
															echo '<td>' . $user->email . '</td>';
															echo '<td>' . $user->created_at . '</td>';
															echo '</tr>';
														}
													?>
												</table>
											</div>
										</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
