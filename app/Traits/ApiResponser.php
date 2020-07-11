<?php 

namespace App\Traits;



use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\resolveCurrentPage;
use Illuminate\Support\isEmpty;


	
	trait ApiResponser
	{
		private function successResponse($data, $code)
		{
			return response()->json($data, $code);

		}


		protected function errorResponse($message, $code)
		{
			return response()->json(['error' => $message, 'code' => $code], $code);
		}

		protected function showAll(Collection $collection, $code = 200)
		{
			if($collection->isEmpty()){
				return $this->successResponse(['data' => $collection], $code);
			}

			return $this->successResponse(['data' => $collection], $code);
		}

		protected function showAllpaginado(Collection $collection, $code = 200)
		{
			if($collection->isEmpty()){
				return $this->successResponse(['data' => $collection], $code);
			}

			$collection = $this->paginate($collection);

			return $this->successResponse(['data' => $collection], $code);
		}

		protected function showOne(Model $instance, $code = 200)
		{
			return $this->successResponse(['data' => $instance], $code);
		}
		protected function showMessage($message, $code = 200)
		{
			return $this->successResponse(['data' => $message], $code);
		}

		protected function paginate(Collection $collection ){
			$page = LengthAwarePaginator::resolveCurrentPage(); 

			$perPage = 2;

			$results = $collection->slice(($page - 1) * $perPage, $perPage)->values();

			$paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
				'path' => LengthAwarePaginator::resolveCurrentPage(),
				]);
			$paginated->appends(request()->all());

			return $paginated;
		}
	}
