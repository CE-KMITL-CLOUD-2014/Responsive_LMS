<?php

	class AdminController extends BaseController {
		public function showHome(){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			return View::make('admin')->with('active', array('active','','','',''));
		}
		public function showPage($page){
			$tmp=unserialize(Cookie::get('user',null));
			$active = array('','','','','');
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			else if($page=='user_teacher' || $page=='user_student' || $page=='user_admin' 
				|| $page=='add_user_admin'){
				$active = array('','active','','','');
			}
			else if($page=='subject'){
				$active = array('','','active','','');
			}
			else if( $page=='relationship' ){
				$active = array('','','','active','');
			}
			else if($page=='user_management'){
				$active = array('','','','','active');
			}
			return View::make($page)->with('active', $active);
		}
		public function addUser($type){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			if($type=='admin'){
				$userInput = new Admin;
				$userInput->setUsername(Input::get('username'));
				$userInput->setPassword(md5(Input::get('password')));
				$userInput->setTitle(Input::get('title'));
				$userInput->setName(Input::get('name'));
				$userInput->setSurname(Input::get('surname'));
				$userInput->setStatus('9');
				$userInput->setEmail(Input::get('email'));
				$userInput->setTelephone(Input::get('telephone'));
				$userInput->setPosition(Input::get('position'));
				$userInput->setStatus_del('0');
				$userInput->setDetail_delete(Input::get('detail_delete'));
				$tmp->addAdmin($userInput);
				return Redirect::to('admin/user_admin');

			}
		}
		public function editUser($type){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			if($type=='admin'){
				$userInput = Admin::getFromId(Input::get('id'));
				$userInput->setUsername(Input::get('username'));
				if(strlen(Input::get('password'))>0){
					$userInput->setPassword(md5(Input::get('password')));
				}
				$userInput->setTitle(Input::get('title'));
				$userInput->setName(Input::get('name'));
				$userInput->setSurname(Input::get('surname'));
				$userInput->setStatus('9');
				$userInput->setEmail(Input::get('email'));
				$userInput->setTelephone(Input::get('telephone'));
				$userInput->setPosition(Input::get('position'));
				$userInput->setStatus_del('0');
				$userInput->setDetail_delete(Input::get('detail_delete'));
				$tmp->editAdmin($userInput);
				return Redirect::to('admin/user_admin');

			}
		}
		public function deleteUser($type){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			if($type=='admin'){
				$userInput = Admin::getFromId(Input::get('id'));
				$detail_delete = Input::get('detail_delete');
				$tmp->delAdmin($userInput,$detail_delete);
				return Redirect::to('admin/user_admin');

			}
		}
		public function searchAdmin($method){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			$condition = Input::get('condition');
			$currentPage = Input::get('currentPage');
			if($method=='search'){
				$table_admin = Admin::search($condition,$currentPage);

				$output = '';
				for ($i=0;$i<count($table_admin);$i++) {
	    			  $output.= '<tr>   
	    			 				 <td>'.$table_admin[$i]->{'username'}.'</td>   
								 	<td>'.$table_admin[$i]->{'title'}.'</td>
						            <td>'.$table_admin[$i]->{'name'}.'</td>
						            <td>'.$table_admin[$i]->{'surname'}.'</td>    
									<td>'.$table_admin[$i]->{'email'}.'</td>
									<td>'.$table_admin[$i]->{'telephone'}.'</td>
									<td>'.$table_admin[$i]->{'position'}.'</td>*/
									<td><div class="btn-group">
						                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">ดำเนินการ <span class="caret"></span> </button>
						                <ul class="dropdown-menu pull-right" role="menu">
						                  <li><a href="'.url('view_edit_user_admin/'.$table_admin[$i]->{'ID'}).'">ดูรายละเอียด</a></li>
						                  <li><a href="'.url('delete_user_admin/'.$table_admin[$i]->{'ID'}).'">ลบผู้ใช้งาน</a></li>
						                </ul>
						              </div></td>
						          </tr>    ';

				}
				return $output;
			}
			if($method=='get_lastpage'){
				//return 'get_lastpage';
				$condition = Input::get('condition');
				return Admin::getLastpage($condition);
			}
			if($method=='get_count'){
				//return 'get_count';
				$condition = Input::get('condition');
				return Admin::getCount($condition);
			}
		}	
		public function viewEditAdmin($id){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			$userInput = Admin::getFromId($id);
			if($userInput!=NULL && $userInput->getStatus_del()=='0'){
				return View::make('view_edit_user_admin')->with('user', $userInput);
			}
			return Redirect::to('/');
		}	
		public function deleteAdmin($id){
			$tmp=unserialize(Cookie::get('user',null));
			if($tmp==NULL || $tmp->getStatus()!= '9'){
				return Redirect::to('/');
			}
			$userInput = Admin::getFromId($id);
			if($userInput!=NULL && $userInput->getStatus_del()=='0'){
				return View::make('delete_user_admin')->with('user', $userInput);
			}
			return Redirect::to('/');
		}
	}