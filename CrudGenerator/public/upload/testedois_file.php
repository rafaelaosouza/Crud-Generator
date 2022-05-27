
        <?php
        namespace App\Http\Controllers;

        use App\Models\Pedro;
        use App\Http\Requests\CursoRequest;
        use Illuminate\Http\Request;

        class CursoController extends Controller
        {
            public function index()
            {
                $pedros = Curso::orderBy('name', 'ASC')->paginate(config('app.size_pagination'))->onEachSide(0);
                return view('admin.cursos.index',compact('cursos'));
            }

            public function search(Request $request)
            {
                $cursos = Curso::search($request->search)->orderBy('name', 'ASC')->paginate(config('app.size_pagination'))->onEachSide(0);
                return view('admin.cursos.index',compact('cursos'));
            }

            public function create()
            {
                $areas = Area::orderBy('name', 'ASC')->get();
                $curso = new Curso();
                return view('admin.cursos.create',compact('curso', 'areas'));
            }

            public function store(CursoRequest $request)
            {
                $data = $request->validated();
                Curso::create($data);
                return redirect()->route('cursos.index')->with('success',true);
            }

            public function show(Curso $curso)
            {
                return view('admin.cursos.show', compact('curso'));
            }

            public function edit(Curso $curso)
            {
                $areas = Area::orderBy('name', 'ASC')->get();
                return view('admin.cursos.edit',compact('curso', 'areas'));
            }

            public function editCursoCriado(Curso $curso)
            {
                return view('admin.cursos.editCursoCriado',compact('curso'));
            }

            public function update(CursoRequest $request, Curso $curso)
            {
                $data = $request->validated();
                $curso->update($data);
                return redirect()->route('cursos.index')->with('success',true);
            }

            public function destroy(Curso $curso)
            {
                $curso->delete();
                return redirect()->route('cursos.index')->with('success',true);
            }
        }

        