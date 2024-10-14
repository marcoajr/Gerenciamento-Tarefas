@extends('layouts.app')

@section('header')

    <div class="container">
        <h2 class="font-weight-bold text-xl text-dark">
            {{ __('Dashboard') }}
        </h2>
    </div>

    
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                <div class="table-responsive-xl">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ações</tr>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>Marco Abraão JR</td>
                                    <td>Teste@teste</td>
                                    <td>Ativo</td>
                                    <td>
                                        <!-- Botão de Ativar -->
                            
                                        <form action="" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Ativar
                                            </button>
                                        </form>
                                

                                    <!-- Botão de Desativar -->
                                    
                                        <form action="" method="POST" style="display:inline;">
                                            <!--@csrf
                                            @method('PUT') -->
                                            <button type="submit" class="btn btn-warning btn-sm">
                                                Desativar
                                            </button>
                                        </form>
                                

                                    <!-- Botão de Excluir -->
                                    <form action="" method="POST" style="display:inline;">
                                        <!--@csrf
                                        @method('DELETE') -->
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Excluir
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection