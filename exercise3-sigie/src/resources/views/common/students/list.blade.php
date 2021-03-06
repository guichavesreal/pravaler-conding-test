<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ __('Nome') }}</th>
            <th scope="col">{{ __('CPF') }}</th>
            <th scope="col">{{ __('Data de nascimento') }}</th>
            <th scope="col">{{ __('E-mail') }}</th>
            <th scope="col">{{ __('Celular') }}</th>
            <th scope="col">{{ __('Curso') }}</th>
            <th scope="col">{{ __('Status') }}</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

            @if(isset($students))
                

            @forelse ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->cpf}}</td>
                    <td>{{$student->birth_date->format('d/m/Y')}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->mobile_number}}</td>
                    <td>{{$student->course->name}}</td>
                    <td>{{$student->status}}</td>
                    <td><a href="/students/{{$student->id}}">Editar</a></td>
                </tr>                                

            @empty
                

            @endforelse
            
            @endif
        
        
    </table>
</div>