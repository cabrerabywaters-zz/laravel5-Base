<?php

    namespace cyb\Http\Controllers;

    use cyb\Http\Requests\CreateCompanyRequest;
    use Illuminate\Http\Request;

    use cyb\Http\Requests;
    use cyb\Http\Controllers\Controller;
    use cyb\Company;
    use Image;

    class CompaniesController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            return Company::all();

        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */
        public function store(CreateCompanyRequest $request)
        {

            $input = $request->input("img");
            $data = base64_decode($input);
            $img = Image::make($data);

            $location = time() . '-' . 'original-' . mt_rand() . ".png";
            $img->save(public_path() . "/uploads/" . $location);


            if (Company::create($input)) {

                return response()->json(['success' => true]);
            }

        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function update($id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id)
        {
            //
        }


        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function indexView()
        {
            return view('companies.index');


        }

    }
