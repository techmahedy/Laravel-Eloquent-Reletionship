<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eloquent</title>

    </head>
    <body>
        
                  @foreach($companies as $company)

                       <h3>{{ $company->name }}</h3>
                        
                        <ul>
                            @foreach($company->customers as $customer)
                             <li> {{ $customer->name }}</li>
                            @endforeach
                        </ul> 
                  @endforeach

<br><br>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <th>InActive</th>
                    </thead>
                    <tbody>
                        @foreach ($isInactive as $isInactive)
                          <tr>
                            <td>{{ $isInactive->name }}</td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <th>Active</th>
                    </thead>
                    <tbody>
                        @foreach ($isActive as $isActive)
                          <tr>
                            <td>{{ $isActive->name }}</td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </body>
</html>
