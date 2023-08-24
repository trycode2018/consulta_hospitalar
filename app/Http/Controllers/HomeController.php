<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function inserirPaciente(REQUEST $request)
    {
        $pcontroller = (new PacienteController())->store($request);
        if (isset($pcontroller) && $pcontroller > 0) {
            return view('paciente', [
                'success' => 'Paciente registrado com sucesso'
            ]);
        } else {
            return view('paciente', [
                'error' => 'Paciente nao registrado !!!'
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function inserirConsulta(Request $request)
    {
        $pcontroller = (new ConsultaController())->store($request);
        $consultas = (new ConsultaController())->index();
        $tipoConsultas = (new TipoConsultaController())->index();
        $pacientes = (new PacienteController())->index();

        if (isset($pcontroller) && $pcontroller > 0) {

            return view('consulta', [
                'consultas' => $consultas,
                'tipoConsultas' => $tipoConsultas,
                'pacientes' => $pacientes,
                'success' => 'Consulta registrada com sucesso'
            ]);
        } else {
            return view('consulta', [
                'consultas' => $consultas,
                'tipoConsultas' => $tipoConsultas,
                'pacientes' => $pacientes,
                'error' => 'Consulta nao registrada !!!'
            ]);
        }
    }
    public function inserirAnalise(Request $request)
    {
        $pcontroller = (new AnaliseController())->store($request);
        $analises = (new AnaliseController())->index();
        $tipoAnalises = (new TipoAnaliseController())->index();
        $pacientes = (new PacienteController())->index();
        $medicos = (new MedicoController())->index();

        if (isset($pcontroller) && $pcontroller > 0) {

            return view('analise', [
                'analises' => $analises,
                'tipoAnalises' => $tipoAnalises,
                'pacientes' => $pacientes,
                'medicos' => $medicos,
                'success' => 'Analise registrada com sucesso'
            ]);
        } else {
            return view('analise', [
                'analises' => $analises,
                'tipoAnalises' => $tipoAnalises,
                'pacientes' => $pacientes,
                'medicos' => $medicos,
                'error' => 'Analise nao registrada !!!'
            ]);
        }
    }
    public function cadastrarMedico(Request $request)
    {
        $pcontroller = (new MedicoController())->store($request);
        $medicos = (new MedicoController())->index($request);

        if (isset($pcontroller) && $pcontroller > 0) {

            return view('medico', [
                'medicos' => $medicos,
                'success' => 'Medico registrado com sucesso'
            ]);
        } else {
            return view('medico', [
                'error' => 'Medico nao registrado !!!'
            ]);
        }
    }
    public function medico()
    {
        $medicos = (new MedicoController())->index();
        return view('medico', [
            'medicos' => $medicos
        ]);
    }
    public function consulta()
    {
        $consultas = (new ConsultaController())->index();
        $tipoConsultas = (new TipoConsultaController())->index();
        $pacientes = (new PacienteController())->index();
        return view('consulta', [
            'consultas' => $consultas,
            'tipoConsultas' => $tipoConsultas,
            'pacientes' => $pacientes,
        ]);
    }
    public function analise()
    {
        $medicos = (new MedicoController())->index();
        $analises = (new AnaliseController())->index();
        $tipoAnalises = (new TipoAnaliseController())->index();
        $pacientes = (new PacienteController())->index();
        return view('analise', [
            'medicos' => $medicos,
            'analises' => $analises,
            'tipoAnalises' => $tipoAnalises,
            'pacientes' => $pacientes,
        ]);
    }
    public function dashboard()
    {
        $pacientes = (new PacienteController())->index();
        $consultas = (new ConsultaController())->index();
        $qtdPaciente = (new PacienteController())->qtdPacientes();
        $qtdMedico = (new MedicoController())->qtdMedicos();
        $qtdConsulta = (new ConsultaController())->qtdConsultas();
        $qtdAnalise = (new AnaliseController())->qtdAnalises();
        return view('index', [
            'pacientes' => $pacientes,
            'consultas' => $consultas,
            'qtdPaciente' => $qtdPaciente,
            'qtdMedico' => $qtdMedico,
            'qtdConsulta' => $qtdConsulta,
            'qtdAnalise' => $qtdAnalise
        ]);
    }
}
