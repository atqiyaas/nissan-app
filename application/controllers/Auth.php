<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login | Nissan Datsun';
            // $this->load->view('auth/index', $data);
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'image' => $user['image'],
                        'name' => $user['name'],
                        'user_id' => $user['user_id'],
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center font-weight-bold">
                    Wrong password</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center font-weight-bold">
                Your Email is not actived</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center font-weight-bold">
            Your Email is not registered</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[tbl_user.email]',
            [
                'is_unique' => 'The Email has been registered !'
            ]
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration || Nissan Datsun';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center font-weight-bold">
                Registration success, Please login !</div>');
            redirect('auth');
        }
    }

    public function forgetPassword()
    {
        $data['title'] = 'Reset Password || Nissan Datsun';
        $this->load->view('auth/forget-password', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user');
    }
}
