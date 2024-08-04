export interface Dictionary {
    id: string;
    name: string;
    description: string;
    created_at: string;
    updated_at: string;
    visited_at: string;
    votes: number;
    user_id: number;
}

export interface Entry {
    id: string;
    dictionary_id: string;
    front: string
    back: string;
    status: 'draft' | 'researched' | 'familiarized' | 'grasped' | 'applied';
    views: number;
    created_at: string;
    updated_at: string;
}