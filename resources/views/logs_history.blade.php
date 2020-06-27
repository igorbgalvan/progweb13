@extends('layouts.app')

@section('content')
<div class="logsBody">
    <a class="logsTitle">Histórico de Logs</a>

    
    <div class="logsBoxes">        
        
        <div class="boxLogs">

            <div class="box-logs-text">
                <table>
                    <tr>
                        <th id="name">Nome</th>
                        <th>Email</th>
                        <th id="action">Ação</th>
                        <th>Mensagem</th>
                        <th>Hora</th>
                    </tr>
                    
                    @foreach ($logs as $log)
                    
                    <tr>
                        <td>{{ $log->name }}</td>
                        <td><textarea disabled>{{ $log->message }}</textarea></td>
                        <td>{{ $log->action }}</td>
                        <td>{{ $log->email }}</td>
                        <td>{{ $log->created_at }}</td>
                    </tr>   
                    @endforeach

                </table>
                
            </div>
            
        </div>
        <div class="links">
            {!! $logs->links() !!}
        </div>
    </div>
</div>
@endsection