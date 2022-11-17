<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\MessagesTable;
use Cake\Http\Response;

/**
 * Messages Controller
 *
 * @property MessagesTable $Messages
 */
class MessagesController extends AppController
{

    /**
     * Add method
     *
     * @return Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function index()
    {
        $message = $this->Messages->newEmptyEntity();

        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());

            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been sent.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The message could not be sent. Please, try again.'));
        }

        $this->set(compact('message'));
    }
}
