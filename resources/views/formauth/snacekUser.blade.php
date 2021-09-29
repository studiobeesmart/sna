  function espCekUser(Request $req){
            $data = $req->input();
            $namanya =  $data['somefield'];

            $countUser = DB::table('nrd_user')->where('nor_user', $namanya)->count();
            if($countUser>0){
                echo "NO";
            }
            //  echo $count;
        }

        
        function espCekEmail(Request $req){
            $data = $req->input();
            $emailnya =  $data['reg_email'];

            $countEmail = DB::table('nrd_user')->where('nor_email', $emailnya)->count();
            if($countEmail>0){
                echo "NO";
            }
            //  echo $count;
        }