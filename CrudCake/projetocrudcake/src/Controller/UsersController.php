<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    
    public function index()
    {
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'Users.id' => 'desc',
            ]
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário Cadastrado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Usuário nao pode ser Cadastrado, Tente Novamente'));
        }
        $this->set(compact('user'));
    }

    
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Alteração Salva com Sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Alteração nao foi salva, tente novamente'));
        }
        $this->set(compact('user'));
    }

    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Apagado com Sucesso'));
        } else {
            $this->Flash->error(__('O Cadastro nao pode ser deletado, Tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
