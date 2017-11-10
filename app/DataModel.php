<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	use DB;

	class DataModel extends Model
	{
	    public function view_articles()
	    {
			$results=DB::select("CALL gs_Get_Resources ;");
			return $results;
	    }

		public function view_event_tour()
		{
		$tour_query  = DB::select("CALL gs_Get_Tournament");
				foreach ($tour_query as $key => $tour_row) 
				{
					 $tour_row->description = nl2br($tour_row->description);
			 	     $tour_row->date_diff = $tour_row->start_date;
				     $results[]              = $tour_row;
				} 
		return $results;
		}
	    public function getJob()
	    {
			$results=DB::select("CALL gs_Get_Job ;");
			return $results;
	    }

}  // End Class 
